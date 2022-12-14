/*
 * Licensed to the Apache Software Foundation (ASF) under one or more
 * contributor license agreements.  See the NOTICE file distributed with
 * this work for additional information regarding copyright ownership.
 * The ASF licenses this file to You under the Apache License, Version 2.0
 * (the "License"); you may not use this file except in compliance with
 * the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

package org.apache.rocketmq.client.apis.producer;

import org.apache.rocketmq.client.apis.ClientException;

/**
 * An entity to describe an independent transaction.
 *
 * <p>Once the request of commit of roll-back reached server, subsequently arrived commit or roll-back request in
 * {@link Transaction} would be ignored by the server.
 *
 * <p>If transaction is not commit/roll-back in time, it is suspended until it is solved by {@link TransactionChecker}
 * or reach the end of life.
 */
public interface Transaction {
    /**
     * Try to commit the transaction, which would expose the message before the transaction is closed if no exception
     * thrown.
     *
     * <p>What you should pay more attention to is that the commitment may be successful even exception is thrown.
     */
    void commit() throws ClientException;

    /**
     * Try to roll back the transaction, which would expose the message before the transaction is closed if no exception
     * thrown.
     *
     * <p>What you should pay more attention to is that the roll-back may be successful even exception is thrown.
     */
    void rollback() throws ClientException;
}