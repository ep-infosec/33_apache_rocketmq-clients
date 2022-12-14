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

package org.apache.rocketmq.client.java.metrics;

import static io.opentelemetry.api.common.AttributeKey.stringKey;

import io.opentelemetry.api.common.AttributeKey;

public class MetricLabels {
    public static final AttributeKey<String> TOPIC = stringKey("topic");
    public static final AttributeKey<String> CLIENT_ID = stringKey("client_id");
    public static final AttributeKey<String> CONSUMER_GROUP = stringKey("consumer_group");
    public static final AttributeKey<String> INVOCATION_STATUS = stringKey("invocation_status");

    private MetricLabels() {
    }
}
