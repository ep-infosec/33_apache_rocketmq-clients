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

package org.apache.rocketmq.client.java.rpc;

import io.grpc.Metadata;
import org.apache.rocketmq.client.java.route.Endpoints;

public class Context {
    private final Endpoints endpoints;
    private final Metadata header;

    public Context(Endpoints endpoints, Metadata header) {
        this.endpoints = endpoints;
        this.header = header;
    }

    public String getRequestId() {
        return header.get(Metadata.Key.of(Signature.REQUEST_ID_KEY, Metadata.ASCII_STRING_MARSHALLER));
    }

    public Endpoints getEndpoints() {
        return endpoints;
    }
}
